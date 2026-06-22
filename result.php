<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
        :root {
            --cream: #FFF8F0;
            --sky: #EAF6FF;
            --lavender-shadow: #E3D9FB;
            --purple: #7C6FF0;
            --pink: #FF8FAB;
            --blue: #5EC8F2;
            --ink: #2E2A4D;
            --muted: #9C97B8;
            --line: #EFE9FB;
        }
 
        * { box-sizing: border-box; }
 
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(160deg, var(--cream) 0%, var(--sky) 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            position: relative;
            overflow-x: hidden;
            color: var(--ink);
        }
 
        /* soft decorative blobs */
        body::before,
        body::after {
            content: "";
            position: fixed;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.55;
            z-index: 0;
        }
        body::before {
            width: 280px;
            height: 280px;
            background: var(--pink);
            top: -80px;
            left: -80px;
        }
        body::after {
            width: 320px;
            height: 320px;
            background: var(--blue);
            bottom: -100px;
            right: -100px;
        }
 
        .wrap {
            background: #fff;
            border-radius: 28px;
            padding: 44px 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 50px -10px var(--lavender-shadow), 0 4px 12px rgba(0,0,0,0.04);
            position: relative;
            z-index: 1;
            text-align: center;
        }
 
        .badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--purple), var(--pink));
            color: #fff;
            font-size: 0.72rem;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 999px;
            margin-bottom: 18px;
            letter-spacing: 0.3px;
        }
 
        .drop-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 10px;
            display: block;
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
 
        h1 {
            font-family: 'Itim', cursive;
            font-size: 1.5rem;
            font-weight: 400;
            margin: 0 0 6px;
            color: var(--ink);
        }
 
        .subtitle {
            font-size: 0.85rem;
            color: var(--muted);
            margin-bottom: 28px;
        }
 
        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
            text-align: left;
        }
 
        form label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: -4px;
        }
 
        .input-row {
            display: flex;
            gap: 10px;
        }
 
        form input[type="number"] {
            flex: 1;
            border: 2px solid var(--line);
            border-radius: 14px;
            padding: 12px 16px;
            font-size: 1rem;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #FBFAFF;
            -moz-appearance: textfield;
        }
        form input[type="number"]::-webkit-inner-spin-button,
        form input[type="number"]::-webkit-outer-spin-button { -webkit-appearance: none; }
        form input[type="number"]:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(124,111,240,0.15);
            background: #fff;
        }
        form input[type="number"]::placeholder { color: #C7C2DE; }
 
        form input[type="submit"] {
            background: linear-gradient(135deg, var(--purple), var(--pink));
            color: #fff;
            border: none;
            border-radius: 14px;
            padding: 12px 22px;
            font-size: 0.95rem;
            font-weight: 600;
            font-family: 'Sarabun', sans-serif;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            white-space: nowrap;
            box-shadow: 0 8px 20px -4px rgba(124,111,240,0.45);
        }
        form input[type="submit"]:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 12px 24px -4px rgba(124,111,240,0.5);
        }
        form input[type="submit"]:active {
            transform: translateY(0) scale(0.98);
        }
 
        h2 {
            font-family: 'Itim', cursive;
            font-size: 1.05rem;
            font-weight: 400;
            color: var(--ink);
            margin: 28px 0 12px;
            text-align: left;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 14px;
            overflow: hidden;
        }
 
        table th {
            background: var(--sky);
            border-bottom: none;
            padding: 10px 12px;
            font-size: 0.8rem;
            color: var(--purple);
            text-align: center;
            font-weight: 700;
        }
 
        table td {
            border-bottom: 1px solid var(--line);
            padding: 10px 12px;
            font-size: 0.95rem;
            text-align: center;
            color: var(--ink);
        }
 
        table tr:last-child td { border-bottom: none; }
        table tr:hover td { background: #FBFAFF; }
    </style>
</head>

<a href="index.php">home</a>

<body>
    <h1>ผลลัพธ์การแปลงลิตรเป็นแกลลอน</h1>
       <?php
        $lit = $_POST["lit"];
        
        echo $lit ."*".  " 3.785"  . " = " . $lit * 3.785. "<br>";
    ?>
</body>
</html>