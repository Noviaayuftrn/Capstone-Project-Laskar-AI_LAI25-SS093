# 📸 Sistem Presensi Siswa Berbasis Pengenalan Wajah (CNN + Laravel)

Proyek ini merupakan sistem presensi otomatis berbasis pengenalan wajah untuk siswa SMK, menggunakan kombinasi:

- 🧠 CNN (Convolutional Neural Network) dengan TensorFlow
- 🧪 Flask API untuk prediksi wajah
- 🌐 Laravel 11 sebagai web frontend & backend

## 📁 Struktur Folder

Projek Presensi/
├── Presensi-CNN/             # Proyek Laravel 11 (Frontend + Backend)
├── model-cnn/                # Flask API + model.h5
├── Recognize face/           # Notebook training + model format SavedModel, TFJS, TFLite
│   ├── saved_model/
│   ├── tfjs_model/
│   ├── tflite/
│   ├── modelling_recognize_face_capstone.ipynb
│   ├── requirements.txt
│   └── readme.md
├── .gitattributes
└── .gitignore



---

## 📂 Struktur Proyek

| Folder | Deskripsi |
|--------|-----------|
| `Presensi-CNN/` | Proyek Laravel untuk manajemen siswa, kelas, dan presensi |
| `model-cnn/`    | Flask API untuk memproses gambar wajah dan mengembalikan hasil prediksi |
| `Recognize face/` | Notebook pelatihan model CNN + hasil ekspor model ke berbagai format (SavedModel, TFJS, TFLite) |

---

## 🔧 Cara Kerja Sistem

1. **Siswa membuka website Laravel (di HP/laptop).**
2. **Website meminta akses kamera dan mengirim foto wajah ke Flask API.**
3. **Flask API memuat model CNN dan mengembalikan prediksi identitas wajah.**
4. **Laravel mencatat presensi berdasarkan hasil prediksi tersebut.**

---

## 🧠 Model Pengenalan Wajah

Model CNN dilatih pada dataset wajah siswa dengan berbagai variasi (seragam berbeda). Proses pelatihan dilakukan di folder:

Recognize face/
├── modelling_recognize_face_capstone.ipynb
├── saved_model/ # Format TensorFlow SavedModel
├── tfjs_model/ # Format TensorFlow.js
├── tflite/ # Format TFLite untuk mobile

---


---

## 🌐 Web Laravel (Presensi-CNN)

Fitur utama:
- CRUD data siswa, guru, kelas, jadwal
- Presensi otomatis menggunakan kamera
- Login multi-user (admin, guru, siswa)
- Statistik presensi

Framework: **Laravel 11**  
URL lokal: `http://127.0.0.1:8000/`

---

## 🧪 Flask API (model-cnn)

File utama: `predict_api.py`  
Model: `model.h5` (diunduh terpisah, link di `Link Download model.h5.txt`)  
URL lokal: `http://127.0.0.1:5000/`

Contoh request dari Laravel:

```js
fetch('http://127.0.0.1:5000/predict', {
  method: 'POST',
  body: formData
})
.then(response => response.json())
.then(data => {
  console.log("Nama terdeteksi:", data.prediction);
});
```

Langkah Menjalankan Proyek (Lokal)
1. Laravel (Presensi-CNN)

cd Presensi-CNN

composer install

npm install && npm run dev

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve

---
2. Flask API (model-cnn)

cd model-cnn

pip install -r requirements.txt

python predict_api.py

---
3. Model Training

cd Recognize face

jupyter notebook

**Buka modelling_recognize_face_capstone.ipynb**

---



