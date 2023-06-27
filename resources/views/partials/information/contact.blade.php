<div class="container flex items-center flex-col">
    <h1 class="sm:text-5xl text-3xl text-transparent text-center bg-linearGreen bg-clip-text font-bold mb-10">
        Contact Us
    </h1>

    <form class="flex flex-col space-y-4 w-full text-white md:w-2/3 xl:w-1/2 ">
        <input type="email" class="p-4 rounded-md outline-none bg-gray-800" name="email"
            placeholder="Masukkan email anda" required />
        <input type="text" class="p-4 rounded-md outline-none bg-gray-800" name="name"
            placeholder="Masukkan nama anda" minLength="3" required />
        <textarea rows="10" class="rounded-md outline-none p-4 bg-gray-800 resize-none" name="message"
            placeholder="Masukkan pesan anda" required></textarea>
        <button type="submit" class="btn btn-primary w-1/2 md:w-1/3 mx-auto">
            Submit
        </button>
    </form>
</div>
