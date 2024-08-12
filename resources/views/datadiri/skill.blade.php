<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill & Keterampilan</title>
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
            <a href="{{ url('kerja') }}">
                <img src="{{ asset('images/kerja.png') }}" alt="Icon" class="icon"> Pengalaman Kerja
            </a>
            <a href="{{ url('skill') }}">
                <img src="{{ asset('images/skill.png') }}" alt="Icon" class="icon"> Skill & Keterampilan
            </a>
        </div>
    </li>
    <li><a href="{{ url('sertif') }}">
        <img src="{{ asset('images/sertif.png') }}" alt="Icon" class="icon"> Sertifikat & Pelatihan
    </a></li>
    <li><a href="{{ url('unduh') }}">
        <img src="{{ asset('images/cvunduh.png') }}" alt="Icon" class="icon"> Unduh CVATS
    </a></li>
</ul>
    </div>
    <div class="container">
        <h2>Skill & Keterampilan</h2>
        <form>
            <div class="form-group">
                <label for="bidang">Bidang:</label>
                <input type="text" id="bidang" name="bidang">
            </div>
            <div class="form-group">
                <label for="posisikerja">Posisi Kerja/Jabatan:</label>
                <input type="text" id="posisikerja" name="posisikerja">
            </div>
            <div class="form-group">
                <label for="keahlian">Keahlian:</label>
                <input type="text" id="keahlian" name="keahlian">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsikan Skill:</label>
                <textarea id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="keterampilan">Deskripsikan Keterampilan:</label>
                <textarea id="keterampilan" name="keterampilan"></textarea>
            </div>
            <div class="form-group button-group">
                <button type="submit">Save</button>
            </div>            
        </form>
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
