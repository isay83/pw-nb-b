const express = require('express');
const session = require('express-session');
const passport = require('passport');
const FacebookStrategy = require('passport-facebook').Strategy;
const router = express.Router();
require('dotenv').config();

const Usuario = require('../model/usuario');

// Configurar sesión
router.use(session({
    secret: process.env.SESSION_SECRET,
    resave: false,
    saveUninitialized: true
}));

// Configurar Passport
router.use(passport.initialize());
router.use(passport.session());

passport.use(
    new FacebookStrategy(
        {
            clientID: process.env.FACEBOOK_APP_ID,
            clientSecret: process.env.FACEBOOK_APP_SECRET,
            callbackURL: "http://localhost/auth/facebook/callback"
        },
        async function (accessToken, refreshToken, profile, cb) {
            try {
                const usuarioModel = new Usuario();
                const usuario = await usuarioModel.buscarPorEmail(profile.emails[0].value);

                if (!usuario) {
                    console.log('Adding new facebook user to DB..');
                    const nuevoUsuario = {
                        email: profile.emails[0].value,
                        nombre: profile.name.givenName,
                        apellidos: profile.name.familyName,
                        genero: 'o',
                        foto: 'none',
                        clave: 'facebook'
                    };
                    const idUsuario = await usuarioModel.crear(nuevoUsuario);
                    return cb(null, { id: idUsuario, ...nuevoUsuario });
                } else {
                    console.log('Facebook User already exist in DB..');
                    return cb(null, usuario);
                }
            } catch (err) {
                return cb(err);
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