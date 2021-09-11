<template>
    <section>
        <nav class="w-screen flex justify-between p-6">
            <ul class="w-80 flex justify-between">
                <li class="cursor-pointer">
                    <a :href="route('home')">
                        <img style="width: 100px" src="https://logodownload.org/wp-content/uploads/2019/09/linktree-logo.png" alt="logo">
                    </a>
                </li>
                <li class="cursor-pointer">Blog</li>
                <li class="cursor-pointer">Pricing</li>
                <li class="cursor-pointer">Help</li>
            </ul>
            <div>
                <a :href="route('auth.login')" class="mr-4">Log In</a>
                <a :href="route('auth.register')" class="p-2 rounded-md bg-green-400 text-green-900 font-bold text-xs">SIGN UP FREE</a>
            </div>
        </nav>
        <main class="flex flex-col items-center mt-24">
            <h1 class="text-6xl">The Only Link You’ll Ever Need</h1>
            <h3 class="text-2xl mt-8 mb-16 text-gray-600">Connect audiences to all of your content with just one link</h3>

            <a :href="route('auth.register')" class="p-4 rounded-xl bg-purple-500 text-white text-xl font-semibold">GET STARTED FOR FREE</a>

            <p class="mt-5">Already on Linktree? <a :href="route('auth.login')" class="underline">Log In</a></p>
        </main>
    </section>
</template>

<script>
export default {
    name: 'Home',
    props: {
        title: String
    }
}
</script>
