 @csrf

 <div class="mb-4">
     <label for="title" class="block mb-2 text-lg text-black">Title</label>
     <input type="text" name="title" id="title" class="w-full border-2 border-black rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400">
 </div>

 <div class="mb-4">
     <label for="content" class="block mb-2 text-lg text-black">Content</label>
     <textarea name="content" id="content" rows="4" class="w-full border-2 border-black rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
 </div>

 <div class="mb-6">
     <label for="genre" class="block mb-2 text-lg text-black">Genre</label>
     <input type="text" name="genre" id="genre" class="w-full border-2 border-black rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400">
 </div>

 <div class="text-center">
     <input type="submit" value="Submit Story" class="bg-black text-white px-6 py-2 rounded-full text-lg hover:bg-pink-600 transition duration-300 cursor-pointer">
 </div>