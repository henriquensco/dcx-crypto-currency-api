<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Echo from 'laravel-echo';
export default {
    mounted() {
        console.log('Component mounted.')
    },
    created() {
        window.Echo.channel('CryptoRealtime')
            .listen('crypto-price', (e) => {
                console.log('ok');
            });
    }
}
</script>
