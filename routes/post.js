const Post = require("../models/Post");
const express = require('express');
const router = express.Router();

router.post('/', async (req,res) => {
    
    const post = new Post({
        title: req.body.title,
        description: req.body.description
    });
    try {
        //Metodo para guardar en la BD
        const savedPost = await post.save();
        res.json(savedPost);
    } catch (error) {
        res.json({ message: error });
    }

});

//EL siguiente bloque de codigo por medio del post muestra un Id
router.get('/:postId', async (req,res) => {
    try {
        const post = await Post.findById(req.params.postId);
        res.json(post);
    } catch (error) {
        res.json({ message: error});
    }
});

//El siguiente bloque borra un get de un Id realizado
router.delete('/:postId', async (req,res) => {
    try{
        const removedPost = await Post.deleteOne({_id: req.params.postId}); //Borra
        res.json(removedPost);
    } catch (error) {
        res.json({message: error});
    }
});

//Actualizacion de un post realizado por un Id

router.patch('/:postId', async(req,res) => {
    try{
        const updatePost = await Post.updateOne(
            {_id: req.params.postId},
            {$set: {title: req.body.title}});
            res.json(updatePost);
    }catch(error){
        res.json({message:error});
    }
});

module.exports = router;