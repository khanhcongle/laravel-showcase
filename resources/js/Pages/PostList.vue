<template>
    <app-layout>
        <div class="container mx-auto px-4 my-20
            w-full md:w-3/4 lg:w-3/5 xl:w-1/2">

            <h2 class="text-4xl">All Posts</h2>
            <div v-if="$apollo.loading">
                Loading...
            </div>
            <div v-else>
                <div v-for="post in posts" :key="post.id">
                    {{ post.id }}: {{ post.title }}
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/BlogShowcaseLayout";
import gql from "graphql-tag";

export default {
    name: "PostList",
    components: {AppLayout},
    apollo: {
        posts: gql`
            query {
                posts {
                    id
                    title
                }
            }
        `
    }
}
</script>

<style scoped>

</style>
