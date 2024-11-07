<div class="border-b border-gray-400">
    @php
        $email = 'achyutkneupane@gmail.com';
        $linkedin = 'https://www.linkedin.com/in/achyut-kneupane/';
        $github = 'https://www.linkedin.com/in/achyut-kneupane/';
        $twitter = 'https://www.linkedin.com/in/achyut-kneupane/';
    @endphp
    <h2 class="section">Contact Me</h2>
    <div class="mx-auto pb-24 lg:mx-48 flex flex-row gap-6">
        <div class="flex flex-col gap-6 w-1/2">
            <div>
                <h3 class="text-2xl font-bold text-primary">Get in touch</h3>
                <p class="text-gray-600">I am available for freelance work. Connect with me via email:</p>
                <a href="mailto:{{ $email }}" class="hover:underline">{{ $email }}</a>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-primary">Social Media</h3>
                <p class="text-gray-600">You can also find me on:</p>
                <div class="flex items-center gap-4">
                    <a href="{{ $linkedin }}" class="hover:underline">LinkedIn</a>
                    <a href="{{ $github }}" class="hover:underline">GitHub</a>
                    <a href="{{ $twitter }}" class="hover:underline">Twitter</a>
                </div>
            </div>
            <div>
                <p class="text-gray-600 mt-4">Feel free to reach out to me. I am always open to discussing new projects,
                    creative ideas or opportunities to be part of your visions.</p>
            </div>
        </div>
        <div class="col-span-2 w-1/2">
            <div class="col-span-2">
                <h3 class="text-2xl font-bold text-primary">Contact Form</h3>
                <form action="#" method="post" class="mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                   class="w-full border border-gray-300 rounded-md p-2 mt-1">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                   class="w-full border border-gray-300 rounded-md p-2 mt-1">
                        </div>
                        <div class="col-span-2">
                            <label for="message" class="text-gray-600">Message</label>
                            <textarea name="message" id="message"
                                      class="w-full border border-gray-300 rounded-md p-2 mt-1"></textarea>
                        </div>
                        <div class="col-span-2">
                            <button type="submit" class="bg-primary/85 text-white px-4 py-2 rounded-md hover:bg-primary">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
