<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .preview-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .preview-box {
            width: 120px;
            height: 120px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 12px;
            border-radius: 8px;
            overflow: hidden;
            background-color: #f8f8f8;
        }

        .preview-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>
</head>

<body style="background: #f4f6f8;">

    @yield('konten')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview Gambar Utama
        document.getElementById('gambarUtamaInput').addEventListener('change', function(e) {
            let preview = document.getElementById('previewGambarUtama');
            let file = e.target.files[0];
            if (file) {
                preview.innerHTML = `<img src="${URL.createObjectURL(file)}">`;
            } else {
                preview.innerHTML = 'Preview';
            }
        });

        // Preview Gambar Tambahan
        document.getElementById('gambarTambahanInput').addEventListener('change', function(e) {
            let previewContainer = document.getElementById('previewGambarTambahan');
            let files = Array.from(e.target.files);
            previewContainer.innerHTML = ''; // hapus isi lama

            if (files.length === 0) {
                // kalau tidak ada file, tampilkan kotak preview kosong
                let emptyBox = document.createElement('div');
                emptyBox.classList.add('preview-box');
                emptyBox.textContent = 'Preview';
                previewContainer.appendChild(emptyBox);
            } else {
                files.forEach(file => {
                    let box = document.createElement('div');
                    box.classList.add('preview-box');
                    let img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    box.appendChild(img);
                    previewContainer.appendChild(box);
                });
            }
        });
    </script>
</html>
