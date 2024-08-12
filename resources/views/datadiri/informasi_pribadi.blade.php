<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pribadi</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="sidebar">
        <div style="width: 216px; height: 129px; position: relative">
            <img style="width: 172px; height: 129px; left: 0px; top: 0px; position: absolute" src="{{ asset('images/icon.png') }}" alt="Icon" />
            <div style="left: 77px; top: 79px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 600; word-wrap: break-word">Ayo</div>
            <div style="left: 121px; top: 79px; position: absolute; color: #07A419; font-size: 24px; font-family: Inter; font-weight: 600; word-wrap: break-word">Kerja.co</div>
        </div>
        <ul>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown()">
                    <img src="{{ asset('images/data.png') }}" alt="Icon" class="icon"> Lengkapi Data Diri 
                    <img src="{{ asset('images/dropdown.png') }}" alt="Icon" class="icon">
                </a>
                <div class="dropdown-content" id="dropdownContent">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/user.png') }}" alt="Icon" class="icon"> Informasi Pribadi
                    </a>
                    <a href="{{ url('pendidikan') }}">
                        <img src="{{ asset('images/pendidikan.png') }}" alt="Icon" class="icon"> Riwayat Pendidikan
                    </a>
                    <a href="{{ url('pekerjaan') }}">
                        <img src="{{ asset('images/kerja.png') }}" alt="Icon" class="icon"> Pengalaman Kerja
                    </a>
                    <a href="{{ url('skill') }}">
                        <img src="{{ asset('images/skill.png') }}" alt="Icon" class="icon"> Skill & Keterampilan
                    </a>
                </div>
            </li>
            <li><a href="{{ url('unduh-cv') }}">
                <img src="{{ asset('images/cvunduh.png') }}" alt="Icon" class="icon"> Unduh CVATS
            </a></li>
        </ul>
    </div>
    <div class="container">
        <h2>Informasi Pribadi</h2>
        <form action="{{ route('informasi-pribadi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir" required>
            </div>
            <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="noHp">No HP:</label>
                <input type="text" id="noHp" name="noHp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="gender">
                    <label>
                        <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Perempuan" required> Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Diri Anda:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="uploadFoto">Upload Foto:</label>
                <div class="upload-btn-wrapper">
                    <button class="btn">Pilih Foto</button>
                    <input type="file" id="uploadFoto" name="uploadFoto" required />
                </div>
                <p id="fileName" class="file-name"></p>
            </div>
            <div class="form-group button-group">
                <button type="submit">Save</button>
            </div>
        </form>    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <script>
        function toggleDropdown() {
            document.getElementById("dropdownContent").classList.toggle("show");
        }

        document.addEventListener('DOMContentLoaded', function() {
            const uploadFotoInput = document.getElementById('uploadFoto');
            const fileNameDisplay = document.getElementById('fileName');

            uploadFotoInput.addEventListener('change', function() {
                const file = uploadFotoInput.files[0];
                if (file) {
                    fileNameDisplay.textContent = `Foto yang dipilih: ${file.name}`;
                } else {
                    fileNameDisplay.textContent = '';
                }
            });
        });

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        </script>
    </body>
</html>
