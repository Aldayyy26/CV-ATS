<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unduh CV</title>
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
            <li>
                <a href="{{ url('unduh') }}">
                    <img src="{{ asset('images/cvunduh.png') }}" alt="Icon" class="icon"> Unduh CVATS
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h2>Unduh CV kamu disini!</h2>
        <form action="{{ route('unduh.cv') }}" method="POST">
        @csrf
            <button type="submit">Unduh CV</button>
        </form>
    </div>
    <script>
        function toggleDropdown() {
            document.getElementById("dropdownContent").classList.toggle("show");
        }

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
