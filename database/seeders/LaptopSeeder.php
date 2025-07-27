<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'nama_laptop' => 'Asus ROG Zephyrus G14',
            'harga' => 38989000,
            'spesifikasi' => 'Processor : AMD Ryzen AI 9 HX 370 Processor 2.0GHz (36MB Cache, up to 5.1GHz, 12 cores, 24 Threads); 
AMD XDNA NPU up to 50TOPS
Display : ROG Nebula Display 14-inch 3K (2560 x 1600, WQXGA) 16:10 aspect ratio OLED Glossy display DCI-P3: 100%, Refresh Rate: 120Hz Response Time: 0.2ms G-Sync / Adaptive-Sync Pantone Validated
Memory : 32GB (16GB*2 LPDDR5X 7500 on board), Max Capacity:32GB
Storage : 1TB PCIe 4.0 NVMe M.2 SSD
Expansion Slots (includes used) : 1x M.2 PCIe
Graphics : NVIDIA GeForce RTX 5060 Laptop GPU, Turbo mode: 1737MHz at, 90W(1687MHz Boost Clock+50MHz OC, 75W+15W Dynamic Boost), 8GB GDDR7
Keyboard : Backlit Chiclet Keyboard 1-Zone RGB, Touchpad With Copilot key
Wireless : Wi-Fi 7(802.11be) (Triple band) 2*2+Bluetooth 5.4
Ports :1x 3.5mm Combo Audio Jack; 1x HDMI 2.1 FRL; 2x USB 3.2 Gen 2 Type-A (data speed up to 10Gbps); 1x USB 3.2 Gen 2 Type-C with support for DisplayPort / power delivery / G-SYNC (data speed up to 10Gbps); 1x Type-C USB 4 with support for DisplayPort / power delivery (data speed up to 40Gbps); 1x card reader (microSD) (UHS-II)
Camera : 1080P FHD IR Camera for Windows Hello
Audio : Built-in 3-microphone array; 4-speaker (dual force woofer) system with Smart Amplifier Technology, 2 Tweeters
Battery : 73WHrs, 4S1P, 4-cell Li-ion
OS : Windows 11 Home + Microsoft Office Home 2024 + Microsoft 365 (1Y)
Free : ROG sleeve; TYPE-C, 100W AC Adapter; ROG Impact Gaming Mouse
Garansi Resmi Asus 2 Years Global Warranty (with 1st year Perfect Warranty)',
            'gambar' => 'https://images.tokopedia.net/img/cache/200/aphluv/1997/1/1/aa95130e5a9248c79718aa5670fd5b7e~.jpeg.webp?ect=4g',
        ]);

        Laptop::create([
            'nama_laptop' => 'MacBook Air M2',
            'harga' => 13499000,
            'spesifikasi' => 'Chip M2 dengan performa CPU, GPU, dan pembelajaran mesin generasi berikutnya
CPU 8-core dan GPU hingga 10-core yang lebih cepat untuk menjalankan berbagai tugas kompleks
Neural Engine 16-core untuk berbagai tugas pembelajaran mesin canggih
Memori terintegrasi lebih cepat hingga 24 GB menjadikan segala yang Anda lakukan terasa lancar
Penerapan filter dan efek gambar hingga 20 persen lebih cepat
Pengeditan garis waktu video kompleks hingga 40 persen lebih cepat
Lakukan banyak hal sepanjang hari dengan kekuatan baterai hingga 18 jam
Desain tanpa kipas untuk pengoperasian yang senyap
Layar Liquid Retina 13,6 inci dengan kecerahan 500 nit dan warna luas P3 untuk gambar yang cemerlang dan detail luar biasa
Kamera FaceTime HD 1080p dengan dua kali lipat resolusi dan performa dalam pencahayaan rendah
Deretan tiga mikrofon lebih mendengarkan Anda, bukan sekeliling Anda
Sistem suara empat speaker dengan Audio Spasial untuk pengalaman mendengarkan yang menghanyutkan
Berbagi konten dengan mulus antara iPhone dan Mac
Port pengisian daya MagSafe, dua port Thunderbolt, dan jek headphone
Magic Keyboard dengan lampu latar dan Touch ID untuk membuka kunci dan melakukan pembayaran dengan aman
Koneksi nirkabel Wi-Fi 6 yang kencang
Penyimpanan SSD super cepat membuka aplikasi dan file dalam sekejap
macOS Monterey memungkinkan Anda terhubung, berbagi, dan berkreasi dengan cara yang benar-benar baru — di semua perangkat Apple Anda
Tersedia dalam warna midnight, starlight, abu-abu, dan perak',
            'gambar' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/6/27/e5b02b16-4870-41c7-b8d6-7b3ce7dff9f9.jpg.webp?ect=4g',
        ]);

        Laptop::create([
            'nama_laptop' => 'Acer Nitro V15',
            'harga' => 10999000,
            'spesifikasi' => '* Processor : Intel Core i5-13420H processor (12MB cache, up to 4.60Ghz)
* Display : 15.6" FHD (1920 x 1080) IPS-Level, 165 Hz, 45% NTSC
* Memory : 8GB DDR5, Upgradable
* Storage : 512 GB SSD NVMe Gen4, 1x slot SSD Free
* Graphics : NVIDIA GeForce RTX 2050 4GB GDDR6
* Keyboard : Backlit Keyboard Single Zone
* Wireless : Wifi 6, Bluetooth 5.2
* Ports : 3x USB 3.2 Gen 1 Type-A; 1x USB 3.2 Gen 2 Type-C (Thunderbolt); 1x HDMI 2.1 Port; 1x Ethernet (RJ-45); 1x Jack Audio
* Camera : HD 720p with Purifyview AI + TNR
* Audio : DTS X:Ultra Audio, featuring optimized Bass, Loudness
* Battery : 57Wh
* OS : Windows 11 Home + OHS 2021

• Garansi Resmi Acer 2 Tahun Full Part
• Dapat Di klaim disemua Service Centre Resmi Acer Indonesia',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7ra0n-mc30xyt7ueu971@resize_w900_nl.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'Asus TUF FA506NFR A15',
            'harga' => 9999000,
            'spesifikasi' => '• Processor : AMD Ryzen 7 7435HS Mobile Processor 3.1GHz (20MB Cache, up to 4.5 GHz, 8 cores, 16 Threads)

• Graphics : NVIDIA GeForce RTX 2050 Laptop GPU 4GB GDDR6, Up to 1670MHz at 60W (70W with Dynamic Boost)

• Display : 15.6-inch FHD (1920 x 1080) 16:9 144Hz Adaptive-Sync Value IPS-level 250nits 1000:1 62.5% sRGB Anti-glare display

• Memory : 8GB DDR5-5600 SO-DIMM, 2x SO-DIMM slots, Max 32GB

• Storage : 512GB PCIe 4.0 NVMe M.2 SSD (2 Slot Include Used)

• Batery : 48WHrs, 3S1P, 3-cell Li-ion 150W AC Adapter

• Webcam : 720P HD Camera

• Keyboard : Backlit Chiclet Keyboard 1-Zone RGB

• Operating System :Windows 11 Home Single Language, English

• Bundled Software :Office Home & Student 2021

• Network : Wi-Fi 6(802.11ax) (Dual band) 2*2 + Bluetooth 5.3 Wireless Card (*Bluetooth version may change with OS version different.)


• Standart Port :

- 1x RJ45 LAN port;

- 1x USB 3.2 Gen 2 Type-C support DisplayPort;

- 3x USB 3.2 Gen 2 Type-A;

- 1x HDMI 2.0b;

- 1x 3.5mm Combo Audio Jack


• Berat : Starting at 2.00 kg 


• Tambah Paket Antigores untuk laptop (langsung dipasang oleh teknisi kami) agar laptop awet.

• Untuk berat sudah termasuk packing bubble rangkap dobel dus (belum termasuk packing kayu)

• Ketentuan GARANSI GANTI BARU 5x24 JAM dari tanggal diterimanya unit ke alamat pengiriman. (wajib disertai video unboxing)


GARANSI RESMI 2 TAHUN ASUS INDONESIA',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7ra0g-mc4vsgn1rlb570.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'Lenovo LOQ',
            'harga' => 13823000,
            'spesifikasi' => '☑ Processor : AMD Ryzen™ 7 7435HS (8C / 16T, 3.1 / 4.5GHz, 4MB L2 / 16MB L3)

☑ RAM : 1x 12GB SO-DIMM DDR5-4800, dual-channel capable, Up to 32GB DDR5-4800

☑ Storage : 512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®

☑ VGA : NVIDIA® GeForce RTX™ 4050 6GB GDDR6, Boost Clock 2370MHz, TGP 105W

☑ Display : 15.6" FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz, G-SYNC®

☑ Sistem Operasi : Windows® 11 Home Single Language, English + Office Home 2024 + Microsoft® 365 Basic

☑ Warna : Luna Grey

☑ Kamera : HD 720p with E-shutter

☑ Audio : Stereo speakers, 2W x2, optimized with Nahimic Audio


Antarmuka :

3x USB-A (USB 5Gbps / USB 3.2 Gen 1)

1x USB-C® (USB 10Gbps / USB 3.2 Gen 2), with Lenovo® PD 140W and DisplayPort™ 1.4

1x HDMI® 2.1, up to 8K/60Hz

1x Headphone / microphone combo jack (3.5mm)

1x Ethernet (RJ-45)

1x Power connector


☑ Bluetooth® : BT5.2

☑ WLAN: Wi-Fi® 6, 802.11ax 2x2

☑ Battery : Integrated 60Wh

☑ Adapter : 170W Slim Tip (3-pin)

☑ Dimensi : 359.86 x 258.7 x 21.9-23.9 mm

☑ Berat : 2.38 kg

Kelengkapan Unit :

☑ Unit Laptop

☑ Power Adapter

☑ Kartu Garansi

☑ Box / Dus Laptop

☑ Lenovo® Modern Backpack


Jenis Garansi : GARANSI RESMI PREMIUM CARE 2 TAHUN + ACCIDENTAL DAMAGE PROTECTION LENOVO INDONESIA',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7rbk7-m9ujst6n89p9b9@resize_w900_nl.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'HP Victus Gaming 15',
            'harga' => 15000000,
            'spesifikasi' => '• Processor : Intel® Core™ i5-13500H (up to 4.7 GHz with Intel® Turbo Boost Technology, 18 MB L3 cache, 12 cores, 16 threads)

• Chipset : Intel® integrated SoC

• Memory : 8 GB DDR4-3200 MHz RAM (1 x 8 GB)

• Storage : 512 GB PCIe® Gen4 NVMe™ M.2 SSD

• Graphics : NVIDIA® GeForce RTX™ 4050 Laptop GPU (6 GB GDDR6 dedicated)

• Display : (15.6") diagonal, FHD (1920 x 1080), 144Hz, IPS, 250 nits

• Operating system : Windows 11 Home Single Language Original Permanent


• Ports:

1x USB Type-A 5Gbps signaling rate

1x USB Type-A 5Gbps signaling rate (HP Sleep and Charge)

1x USB Type-C® 5Gbps signaling rate (DisplayPort™ 1.4, HP Sleep and Charge)

1x HDMI 2.1

1x RJ-45

1x AC smart pin

1x headphone/microphone combo


• Audio : Audio by B&O; Dual speakers; HP Audio Boost

• Camera : HP Wide Vision 720p HD camera with temporal noise reduction and integrated dual array digital microphones

• Keyboard : Full-size, backlit, mica silver keyboard with numeric keypad; Full-size, backlit, performance blue keyboard with numeric keypad; Full-size, backlit, ceramic white keyboard with numeric keypad

• Wireless : MediaTek Wi-Fi 6 MT7921 (2x2) and Bluetooth® 5.3 wireless card (supporting gigabit data rate) Modern Standby (Connected); HP Extended Range Wireless LAN

• Network interface : Integrated 10/100/1000 GbE LAN

• Power supply type : 200 W Smart AC power adapter

• Battery type : 4-cell, 70 Wh Li-ion polymer

• Minimum dimensions (W x D x H) : 35.79 x 25.5 x 2.35 cm

• Weight : 2.29 kg

=======================================================================

- Free Backpack HP

- Free Office Home Student LIFETIME

- Garansi Resmi HP Indonesia 2 Tahun + ADP',
            'gambar' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rdx1-mcj428f2zbda7a@resize_w900_nl.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'AXIOO PONGO 725',
            'harga' => 9444000,
            'spesifikasi' => 'Processor:	Intel Core i7-12650H (10 Cores, 16 Threads, TDP:45 W)

"Performance Cores: 6 Cores, 12 Threads, 2.3 GHz Base, 4.7 GHz Turbo

Efficient Cores: 4 Cores, 4 Threads, 1.7 GHz Base, 3.5 GHz Turbo"

Code Name	Intel Alder Lake

Graphics Controller:

	Intel Graphics 
 		NVIDIA GeForce RTX 2050 Laptop GPU 4GB GDDR6 Up to 55W



 RAM: 	16GB	(2x 8GBGB  SODIMM DDR4 3200Mhz), up to 64GB Dual Channel

Storage: 512 2280 M.2 PCIe Gen. 4x4 NVMe SSD

                1x  2280  M.2 PCIe Gen. 3x4 NVMe SSD



Windows 11 (64-bit)

Office : Libre Office



Backlit Keyboard



LCD:	15.6" inch (16:9) 144Hz

Display  / Resolution:	FHD (1920 x 1080)



Camera Front:	1.0M HD



Sound System:

	Realtek HD Audio

	Sound Blaster Studio

	Built-in Microphone 


Power Management:

	Full Range AC adapter, AC in 100~240V, 50~60Hz, DC output 20V 6A,120W

	Embedded 4 cells Polymer battery pack, 54WH

Connection:

	Intel AX201NGW (Bands： 2.4Ghz, 5Ghz (160Mhz))

	Bluetooth 5.2

Speaker:	2 x Speakers  


Security:

	Kensington lock slot

	Intel PTT for system without Hardware TPM


Dimension	359.5 (W) x 238 (D) x 22.7 (H) mm 

weight:	1.99 kg



I/O Ports:

	1 x USB 2.0 port (Type A)

	1 x USB 3.2 Gen 1 port (Type A)

	2 x USB 3.2 Gen 2 ports (Type C)

	1 x Mini Display port 1.4

	1 x HDMI  output port (with HDCP)

	1 x 2-in-1 Audio Jack (Headphone / Microphone)

	1 x Microphone Jack

	1 x RJ-45 GigaBit LAN port

	1 x DC-in jack

	1 x MicroSD Card reader Slot



GARANSI RESMI AXIOO 3 TAHUN',
            'gambar' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rdve-mc8pe7rpv0hj7c.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'Acer Predator Helios neo 16',
            'harga' => 17000000,
            'spesifikasi' => 'Processor : 14th Gen Intel Core i5-14500HX (up to 4.9 GHz with Intel Turbo Boost Technology, 24 MB L3 cache, 14 cores, 20 threads)

Display : 16″ WUXGA IPS, 180Hz, 100% SRGB

Memory : 8GB (1×8 GB of DDR5 5600Mhz), upgradable to 32 GB

Storage : 512GB SSD NVMe GEN4, 1x slot SSD Free

Graphics : NVIDIA GeForce RTX 4050 with 6 GB of dedicated GDDR6 VRAM

Keyboard : 4zone RGB

Wireless : WiFi 6E Intel AX1675i 802.11ax 2×2, Bluetooth 5.3


Port :

1x USB 3.2 Gen1;

1x port for USB 3.2 Gen 2;

1x Port USB 3.2 Gen2 (featuring power-off USB charging);

2x Port USB 3.2 Gen2 Type-C (support Thunderbolt 4.0, DisplayPort, dan Power Delivery);

1x Port HDMI;

1x Ethernet (RJ-45) port;

1x microSD card (SDXC compatible);

1x port combo audio


Camera : 1080p Webcam

Battery : 90 Wh 4-cell Li-ion battery

SKU : PHN16-72-53KS (NH.QNPSN.003)

Color : Black

OS : Windows 11 Home + OHS 2021 + Microsoft 365

Free : Backpack

Garansi Resmi Acer 3 Tahun',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7rbk6-m9zsxa25vwab01.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'LENOVO THINKPAD E14 G6',
            'harga' => 15000000,
            'spesifikasi' => 'Processor : Intel Core Ultra 7 255H, 16C (6P + 8E + 2LPE) / 16T, Max Turbo up to 5.1GHz, 24MB

Display : 14" WUXGA (1920x1200) IPS 300nits Anti-glare, 45% NTSC, 60Hz

Graphics : Integrated Intel Arc 140T GPU Functions as Intel Graphics

Memory : 1x 8GB SO-DIMM DDR5-5600 dual-channel capable Up to 64GB

Storage : 512GB SSD M.2 2242 PCIe 4.0x4 NVMe Opal 2.0

OS : Windows 11 Pro, English (US) / English (UK)

WLAN + Bluetooth : Intel Wi-Fi 6E AX211, 802.11ax 2x2 + BT5.3

Keyboard : Backlit, English



Ports :

1x USB-A (USB 5Gbps / USB 3.2 Gen 1)

1x USB-A (USB 10Gbps / USB 3.2 Gen 2), Always On

1x USB-C (USB 20Gbps / USB 3.2 Gen 2x2), with USB PD 3.1 and DisplayPort 1.4

1x USB-C (Thunderbolt 4 / USB4 40Gbps), with USB PD 3.1 and DisplayPort 2.1

1x HDMI 2.1, up to 4K/60Hz

1x Headphone / microphone combo jack (3.5mm)

1x Ethernet (RJ-45)



Audio Chip : High Definition (HD) Audio, Senary SN6147 codec

Speakers : Stereo speakers, 2W x2, Dolby Atmos, audio by HARMAN

Camera : FHD 1080p + IR Hybrid with Privacy Shutter

Microphone : 2x, Array

Battery : 48Wh

Power Adapter : 65W USB-C (3-pin)',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7ra0t-mcg9gafhz9ynaa.webp',
        ]);

        Laptop::create([
            'nama_laptop' => 'MSI THIN 15',
            'harga' => 9000000,
            'spesifikasi' => 'Processor : 12th Gen Intel® Core™ i5-12450H Up To 4,4Ghz 8 Core 12 Threads

Graphic : NVIDIA® GeForce RTX™ 2050 Laptop GPU 4GB GDDR6

Memory : 8GB DDR4-3200MHz

Storage : 512GB NVMe PCIe SSD

Display : 15.6″ FHD (1920×1080), 144Hz Refresh Rate, IPS-Level



Operating System : Windows 11 Home



Keyboard : Single Backlit Keyboard (Blue)

Webcam : HD type (30fps@720p)

Audio : 2x 2W Audio Speaker, Hi-Res Audio Ready, DTS Audio Processing



I/O Ports:

1x Type-C (USB3.2 Gen1 / DP)

3x Type-A USB3.2 Gen1

1x HDMI™ (4K @ 30Hz)

1x RJ45



LAN : Gigabit Ethernet

WIFI/BLUETOOTH : Intel® Wi-Fi 6E AX211, Bluetooth v5.3



Battery : 3-Cell 52.4 Whrs

AC Adapter : 120W Adaptor



Dimensi : 359 x 254 x 21.7 mm

Weight : 1.86 kg



Security : Firmware Trusted Platform Module(fTPM) 2.0, Kensington Lock



Bundle: MSI Essential Backpack

Garansi Resmi 2 Tahun MSI Indonesia



NOTED :

⚠ Garansi Resmi 2 Tahun (Terhitung dari Nota Pembelian)

⚠ Garansi Toko 5 Hari (Terhitung dari pesanan diterima)',
            'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7ra0r-mcbjmxmnuquz3d.webp',
        ]);
    }
}