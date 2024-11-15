const express = require('express');
const router = express.Router();

const mediaHandler = require('./handler/media');
//const {APP_NAME} = process.env;

router.post('/', mediaHandler.create);
router.get('/', mediaHandler.getAll);

module.exports = router;
