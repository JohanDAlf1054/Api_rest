//Se inicia el modulo expres para dar inicio al servidor, evitando configuraciones.
const express = require('express'); //Se importa el paquete
const mongoose = require('mongoose');
const app = express();
const bodyParser = require('body-parser')

app.use(bodyParser.json());

const postRoute = require('./routes/post');
app.use('/servicios',postRoute);

//En el siguiente bloque de codigo se crean las rutas.

app.get('/', (req, res)=>{
    res.send('Prueba 1 respuesta del servidor');
});

async function connectToDatabase() {
    //Prueba de conecxion hacia la BD.
    try {
        await mongoose.connect('mongodb+srv://Johan_Al:Johanalfonso1054@cluster0.3eby90e.mongodb.net/?retryWrites=true&w=majority&appName=AtlasApp', {
            useNewUrlParser: true,
            useUnifiedTopology: true
        });
        console.log('Connected to MongoDB');
        app.listen(1000);
    } catch (error) {
        console.error('Error connecting to MongoDB:', error);
    }
}
//Conecxion de la BD
connectToDatabase();


