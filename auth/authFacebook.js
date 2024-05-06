const passport = require('passport');
const FacebookStrategy = require('passport-facebook').Strategy;

const router = express.Router();
require('dotenv').config();

const DB_HOST = process.env.DB_HOST;
const DB_USER = process.env.DB_USER;
const DB_PASSWORD = process.env.DB_PASSWORD;
const DB_DATABASE = process.env.DB_DATABASE;

passport.use(
    new FacebookStrategy(
        {
            clientID: process.env.FACEBOOK_APP_ID,
            clientSecret: process.env.FACEBOOK_APP_SECRET,
            callbackURL: "http://localhost/auth/facebook/callback"
        },
        async function (accessToken, refreshToken, profile, cb) {
            const user = await User.findOne({
                accountId: profile.id,
                provider: 'facebook',
            });
            if (!user) {
                console.log('Adding new facebook user to DB..');
                const user = new User({
                    accountId: profile.id,
                    name: profile.displayName,
                    provider: profile.provider,
                });
                await user.save();
                // console.log(user);
                return cb(null, profile);
            } else {
                console.log('Facebook User already exist in DB..');
                // console.log(profile);
                return cb(null, profile);
            }
        }
    )
);

router.get('/', passport.authenticate('facebook', { scope: 'email' }));

router.get(
    '/callback',
    passport.authenticate('facebook', {
        failureRedirect: '/auth/facebook/error',
    }),
    function (req, res) {
        // Successful authentication, redirect to success screen.
        res.redirect('/auth/facebook/success');
    }
);

router.get('/success', async (req, res) => {
    const userInfo = {
        id: req.session.passport.user.id,
        displayName: req.session.passport.user.displayName,
        provider: req.session.passport.user.provider,
    };
    res.render('fb-github-success', { user: userInfo });
});

router.get('/error', (req, res) => res.send('Error logging in via Facebook..'));

router.get('/signout', (req, res) => {
    try {
        req.session.destroy(function (err) {
            console.log('session destroyed.');
        });
        res.render('auth');
    } catch (err) {
        res.status(400).send({ message: 'Failed to sign out fb user' });
    }
});

module.exports = router;