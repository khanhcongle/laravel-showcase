<template>
    <app-layout>
        <div v-if="$apollo.loading">
            Loading...
        </div>
        <div v-else>
            <div v-for="post in posts" :key="post.id">
                {{ post.id }} {{ post.title }}
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
