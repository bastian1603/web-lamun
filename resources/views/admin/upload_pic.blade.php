<x-layout title="Upload Pic">
    
    <div class="container max-w-lg mx-auto max">

        <input type="file" id="pic_upload" class="file-input file-input-success" />
        <br>
        <br>

        <input type="text" name="details" class="input input-success">
        <br>
        <br>

        <select name="location" id="location">
            <option value="">asdasd</option>
        </select>

        <br>
        <br>

        <button type="button" class="btn btn-success">Submit</button>
    
    </div>

    <script>
        let FILES = [];

        document.addEventListener("DOMContentLoaded", function () {
            const file_input = document.getElementById('pic_upload');
        
            file_input.addEventListener("change", (e) => {
                const file = e.target.files[0];
                if (!file) return;

                FILES.push(file);
                console.log("File berhasil ditambahkan");
            });
        });


    </script>

</x-layout>