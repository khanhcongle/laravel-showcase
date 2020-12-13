<template>
    <div>
        <inertia-link :href="route('post.show', post.id)">
            <h4 class="text-2xl hover:underline">{{ post.title }} </h4>
            <p class="text-gray-600 pb-3">{{ post.lead }}</p>
            <div class="text-sm text-gray-600">By Khanh C. Le&nbsp;in Links&nbsp;· 3 hours ago</div>
        </inertia-link>
    </div>
</template>

<script>
export default {
    name: "PostListItem",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
