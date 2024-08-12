<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengalaman Kerja</title>
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
        <h2>Pengalaman Kerja</h2>
        <form action="{{ route('pekerjaan.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="nama">Nama Perusahaan:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Posisi Kerja / Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" required>
            </div>
            <div class="form-group">
                <label for="tanggalmulai">Tanggal Mulai:</label>
                <input type="date" id="tanggalmulai" name="tanggalmulai" required>
            </div>
            <div class="form-group">
                <label for="tanggalselesai">Tanggal Selesai:</label>
                <input type="date" id="tanggalselesai" name="tanggalselesai" required>
            </div>          
            <div class="form-group">
                <label for="negara">Negara:</label>
                <input type="text" id="negara" name="negara" required>
            </div>
            <div class="form-group">
                <label>Jenis Pekerjaan:</label>
                <div class="jenis">
                    <label>
                        <input type="radio" name="jenis" value="formal" required> Formal
                    </label>
                    <label>
                        <input type="radio" name="jenis" value="nonformal" required> Nonformal
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Ringkasan tentang pekerjaan Anda:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
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
