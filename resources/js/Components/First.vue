<template>
    <div class="w-full p-5 flex justify-center">
        <button @click="counter++" class="w-1/3 btn btn-warning">
            {{ counter }}
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue';
const counter = ref(0);
</script>
