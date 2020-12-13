<template>
    <app-layout>
        <div class="container mx-auto px-4 my-20
            w-full md:w-3/4 lg:w-3/5 xl:w-1/2">

            <h2 class="text-4xl">All Posts</h2>
            <div v-if="$apollo.loading">
                Loading...
            </div>
            <div v-else>
                <post-list-item v-for="post in posts" :key="post.id" :post="post"
                                class="mt-10">
                </post-list-item>
            </div>
        </div>
    </app-layout>
</template>

<script>
import gql from "graphql-tag";
import AppLayout from "@/Layouts/BlogShowcaseLayout";
import PostListItem from "@/Components/PostListItem";

export default {
    name: "PostList",
    components: {PostListItem, AppLayout},
    apollo: {
        posts: gql`
            query {
                posts {
                    id
                    title
                    lead
                }
            }
        `
    }
}
</script>

<style scoped>

</style>
