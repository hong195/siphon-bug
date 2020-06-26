<template>
    <div>
        <ul>
            <li :key="word.id" v-for="word in words">{{ word }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                words: []
            };
        },
        mounted() {

            let el = document.querySelector("div[data-words]");
            let mywords = el.dataset.words.split(",");

            this.words.push.apply(this.words, mywords);
        }
    };
</script>

<style scoped>
    .center {
        text-align: center;
    }
</style>