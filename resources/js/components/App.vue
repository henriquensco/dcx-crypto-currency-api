<template>
    How To Install Vue 3 in Laravel 9 with Vite - TechvBlogs
</template>

<script>
import Pusher from 'pusher-js';

export default {
    name: 'App',
    methods: {
        teste() {
            Pusher.logToConsole = true;

            var pusher = new Pusher('fd70437237898414221a', {
                cluster: 'us2'
            });

            var channel = pusher.subscribe('crypto-price');
            channel.bind('crypto-price', function (data) {
                console.log(data);
            });
        }
    },
    created() {
        this.teste();
    }
}
</script>