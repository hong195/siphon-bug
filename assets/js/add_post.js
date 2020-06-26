import Vue from '../js/app';

import '../css/add_post.css';
import AddPost from './components/AddPost';

/*
const add_post = new Vue({
    el: '#app',
    render: h => h(AddPost)
});*/
//console.log(vue)
export default {
    el: '#app',
    render: h => h(AddPost)
}