const mysql = require('mysql');

class Usuario {
    constructor() {
        this.connection = mysql.createConnection({
            host: process.env.DB_HOST,
            user: process.env.DB_USER,
            password: process.env.DB_PASSWORD,
            database: process.env.DB_DATABASE
        });
    }

    crear(usuario) {
        return new Promise((resolve, reject) => {
            const query = `INSERT INTO Usuario (IdTipoUsuario, Email, Clave, Nombre, Apellidos, Genero, Foto, IdProveedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)`;
            this.connection.query(query, [1, usuario.email, usuario.clave, usuario.nombre, usuario.apellidos, usuario.genero, usuario.foto, usuario.proveedor], (err, result) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(result.insertId);
                }
            });
        });
    }

    buscarPorEmail(email) {
        return new Promise((resolve, reject) => {
            const query = `SELECT * FROM Usuario WHERE Email = ?`;
            this.connection.query(query, [email], (err, result) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(result[0]);
                }
            });
        });
    }
}

module.exports = Usuario;