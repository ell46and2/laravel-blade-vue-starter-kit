<script setup lang="ts">
import { ref } from 'vue';

const counter = ref<number>(0);

const handleClick = (event: Event) => {
    counter.value++;
};
</script>

<template>
    <button type="button" class="rounded bg-gray-500 p-2 text-white" @click="handleClick">
        Counter is: {{ counter }}
    </button>
</template>
