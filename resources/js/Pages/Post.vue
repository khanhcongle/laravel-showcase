<template>
    <div class="container mx-auto px-4 w-full md:w-3/4 lg:w-3/5 xl:w-1/2 mt-20">
        <div>
            <div class="text-lg text-gray-600">By Khanh C. Le in Links · 3 hours ago</div>

            <h1 class="text-5xl mt-10 font-bold mb-12">The post tile</h1>

            <p class="text-gray-700 pb-3 mb-12 whitespace-pre-line">The blog post content</p>

            <div class="mb-24 flex">
                <div class="mr-6">
                    <img src="/storage/faces/ahmad.jpg" alt="Author avatar" class="w-16 h-16 rounded-full" />
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-xl text-gray-600">Written by Khanh C. Le</div>
                    <div class="text-gray-600">Published in Link On Dec 12, 2020</div>
                </div>
            </div>
        </div>
        This is a post {{ post }}
    </div>
</template>

<script>
export default {
    name: "Post",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
