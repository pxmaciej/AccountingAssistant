<template>
<div class="app">
    <router-view @updateStatus="updateStatus" ></router-view>
</div>
</template>

<script>

export default {
    name: "App",
};
</script>
