const express = require('express');
const router = express.Router();

const usersHandler = require('./handler/users');
//const {APP_NAME} = process.env;

router.post('/register', usersHandler.register);

module.exports = router;
