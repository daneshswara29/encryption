# encryption SHC

<li>Install SHC</li>
<pre><code>sudo apt-get update</code></pre>
<pre><code>sudo apt install build-essential</code></pre>
<pre><code>sudo apt-get install -y jq</code></pre>

<li>Cara Pasang SHC</li>
<pre><code>wget https://raw.githubusercontent.com/SatanTech/encryption/main/shc.sh && chmod +x shc.sh</code></pre>
<li>Jalankan Perintah</li>
<pre><code>./shc.sh</code></pre>

<li>Cara Pasang BZEXE/BZIP2</li>
<pre><code>wget https://raw.githubusercontent.com/SatanTech/encryption/main/enc.sh && chmod +x enc.sh</code></pre>
<li>Jalankan Perintah</li>
<pre><code>./enc.sh</code></pre>

Encryption menggunakan SHC Atau BZEXE/BZIP2 tanpa ribet harus encrypt satu persatu ini tools untuk encrypt sekaligus berapapun yang mau di encrypt

<li>Penting!</li>
Salin folder autoscript nya ke dalam folder root vps lalu ketik ./enc.sh atau ./shc.sh nama_folder <br>
contoh : ./enc.sh sfvt<br>
ini akan menencrypt seluruh file di dalam enc beserta sub folder nya<br>
Contoh :

    ├── script.sh
    ├── folder1
    │   ├── subfolder1
    │   │   └── script1.sh
    │   └── subfolder2
    │       └── script2.sh
    └── folder2
        ├── subfolder3
        │   └── script3.sh
        └── subfolder4
            └── script4.sh
