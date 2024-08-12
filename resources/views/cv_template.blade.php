<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $informasi_pribadi->nama }}'s CV</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        h1 {
            font-size: 32px;
            margin: 0;
            color: #07A419;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        p {
            font-size: 14px;
            margin: 5px 0;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 10px;
            color: #07A419;
            border-bottom: 2px solid #07A419;
            padding-bottom: 5px;
        }
        .section-content {
            margin-left: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $informasi_pribadi->nama }}</h1>
            <p>{{ $informasi_pribadi->uploadFoto }}</p>
            <p>{{ $informasi_pribadi->email }} | {{ $informasi_pribadi->noHp }}</p>
        </div>
        <div class="section">
        <div class="section-title">Informasi Pribadi</div>
            <h1>{{ $informasi_pribadi->tempatLahir }}</h1>
            <p>{{ $informasi_pribadi->tanggalLahir }}</p>
            <p>{{ $informasi_pribadi->alamat }}</p>
            <p>{{ $informasi_pribadi->gender }}</p>
            <p>{{ $informasi_pribadi->deskripsi }}</p>
        </div>

        <div class="section">
            <div class="section-title">Pengalaman Kerja</div>
            <div class="section-content">
                @foreach($pekerjaan as $job)
                    <h3>{{ $job->nama }} - {{ $job->jabatan }}</h3>
                    <p>{{ $job->tanggalmulai }} - {{ $job->tanggalselesai }}</p>
                    <p>{{ $job->negara }}</p>
                    <p>{{ $job->jenis }}</p>
                    <p>{{ $job->deskripsi }}</p>
                @endforeach
            </div>
        </div>

        <div class="section">
            <div class="section-title">Riwayat Pendidikan</div>
            <div class="section-content">
                @foreach($pendidikan as $edu)
                    <h3>{{ $edu->pendidikan }} - {{ $edu->namasekolah }}</h3>
                    <p>{{ $edu->tanggalmasuk }} - {{ $edu->tanggallulus }}</p>
                    <p>{{ $edu->gelar }}</p>
                    <p>{{ $edu->ipk }}</p>
                    <p>{{ $edu->nilaiRataRata }}</p>
                    <p>{{ $edu->alamatlengkap }}</p>
                    <p>{{ $edu->deskripsi }}</p>
                @endforeach
            </div>
        </div>

        <div class="section">
            <div class="section-title">Skill & Keterampilan</div>
            <div class="section-content">
                @foreach($skills as $skill)
                    <p>{{ $skill->bidang }}</p>
                    <p>{{ $skill->posisikerja }}</p>
                    <p>{{ $skill->keahlian }}</p>
                    <p>{{ $skill->deskripsi }}</p>
                    <p>{{ $skill->keterampilan }}</p>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
