# Recognize Face Project

## 📑 Deskripsi Proyek

Proyek ini bertujuan untuk membangun sistem pengenalan wajah menggunakan model CNN (Convolutional Neural Network) berbasis TensorFlow dan MobileNet. Dataset wajah siswa diproses dan digunakan untuk melatih model yang mampu mengenali wajah siswa dengan akurasi tinggi.

## 📅 Anggota

- **Novia Ayu Fitriana**
- **Muhammad Akmal**

## ⚙️ Teknologi & Library

Berikut adalah daftar pustaka Python yang digunakan:

```python
!pip install tensorflow tensorflowjs

import os
import io
import zipfile
import shutil
import unicodedata
import random
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from pathlib import Path
from tqdm.notebook import tqdm
from google.colab import files

import cv2
from PIL import Image
from sklearn.model_selection import train_test_split
from sklearn.metrics import confusion_matrix, classification_report

import tensorflow as tf
from tensorflow.keras import regularizers
from tensorflow.keras.preprocessing import image
from tensorflow.keras.models import Sequential, Model
from tensorflow.keras.layers import InputLayer, Conv2D, MaxPooling2D, Flatten, Dense, Dropout
from tensorflow.keras.preprocessing.image import ImageDataGenerator, img_to_array, load_img
from tensorflow.keras.applications import MobileNet
from tensorflow.keras.applications.mobilenet import preprocess_input
from tensorflow.keras.optimizers import Adam
from tensorflow.keras.callbacks import ModelCheckpoint, EarlyStopping, ReduceLROnPlateau
```

## 📂 Struktur Folder Dataset

Dataset awal disimpan di folder Google Drive, lalu di-split menjadi:

- `train/`
- `val/`
- `test/`

Nama folder dinormalisasi untuk menghindari karakter khusus.

## ✍️ Preprocessing

- Normalisasi nama folder
- Split dataset dengan rasio:
  - Train: 70%
  - Validation: 15%
  - Test: 15%
- Augmentasi gambar dilakukan pada data train menggunakan `ImageDataGenerator`

## 👩‍💻 Arsitektur Model

Model CNN memiliki arsitektur sebagai berikut:

```python
Conv2D(32) → MaxPooling → Conv2D(64) → MaxPooling → Conv2D(128) → MaxPooling → Flatten → Dense(512) → Dropout(0.5) → Dense(33, softmax)
```

## 🎨 Visualisasi

Model dilatih selama 50 epoch (dengan early stopping dan reduce LR on plateau). Hasil visualisasi training:

- Akurasi vs Epoch
- Loss vs Epoch

## ✅ Evaluasi

Evaluasi dilakukan pada data training dan testing. Model dianggap sukses jika akurasi > 85%.

## 🚀 Konversi Model

Model disimpan dalam dua format:

- **SavedModel** (`saved_model/`)
- **TensorFlow Lite** (`tflite/model.tflite`)

Model ini siap digunakan untuk implementasi pada aplikasi mobile berbasis Android.

## 📄 Label Data

Model mengenali wajah dari 33 label siswa yang telah dinamai dan distandarisasi.

Contoh label:

```text
- Sakti Widi Yulistiani
- Salsa Nabila
- Siti Rafika Kyrania
- ... dst.
```

## 📚 Referensi

- TensorFlow Documentation
- Google Colab Guide
- Image Augmentation with Keras
- MobileNet Pre-trained Model

---

Proyek ini dikembangkan untuk keperluan tugas pembelajaran pengenalan pola dan deep learning.

**© 2025 Novia & Akmal**

