const mongoose = require('mongoose');
const PostSchema = mongoose.Schema({
    //Datos para ingresar en la DB
    title: {
        type: String,
        require:true
    },
    description: {
        type: String,
        require:true
    },
    date: {
        type: Date,
        default: Date.now
    }
});

module.exports = mongoose.model('Post',PostSchema);