<!DOCTYPE html>
<html>
<head>
    <title>Website Under Construction</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: green;
            flex-direction: column;
        }
        
        h1 {
            color: yellow;
            text-align: center;
            animation: marquee 5s infinite;
        }
        
        p {
            font-size: 20px;
            color: yellow;
            text-align: center;
        }
        
        span {
            animation: ticker 1s infinite;
            display: inline-block;
        }
        
        @keyframes ticker {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <h1>Website Under Construction</h1>
    <p>Mohon maaf, website kami sedang dalam tahap konstruksi.</p>
    <p>Kami bekerja keras untuk membawa Anda Ke pengalaman yang terbaik.</p>
    <p>Kami tidak Sabar Untuk Bisa menyajikan Website yang informatif Dan Canggih.</p>
    <p style="font-size: 20px; color: yellow;"><b>PT.MAXIMUM DIGITAL NUSANTARA</b></p>
    <p style="font-size: 20px; color: red;"><span id="clock"></span><br><span id="date"></span></p>

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var time = hours + ":" + addZero(minutes) + ":" + addZero(seconds);
            document.getElementById('clock').textContent = time;

            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var day = now.getDay();
            var date = now.getDate();
            var month = now.getMonth();
            var year = now.getFullYear();
            var currentDate = days[day] + ', ' + date + ' ' + months[month] + ' ' + year;
            document.getElementById('date').textContent = currentDate;
        }

        function addZero(num) {
            return (num < 10 ? "0" : "") + num;
        }

        setInterval(updateClock, 1000);
    </script>
</body>
</html>
