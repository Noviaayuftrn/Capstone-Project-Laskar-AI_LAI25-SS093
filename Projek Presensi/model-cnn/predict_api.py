from flask import Flask, request, jsonify
from flask_cors import CORS
import tensorflow as tf
import numpy as np
from PIL import Image
import io

app = Flask(__name__)
CORS(app)

# Load model CNN
model = tf.keras.models.load_model('model2.h5')  # Pastikan path model benar

# Label kelas sesuai urutan training
class_labels = [
    'ahmad_hairi_aidil', 'alvin_husada', 'ares_fayzaramadhana', 'arsyad', 'dedy_saputra',
    'durrasul', 'erma_norjanah', 'hafizh_adila', 'hamidani', 'hasbiannur', 'hikmawan',
    'm._rafiuddin', 'm._rafli', 'm._ridho', 'm._ridho_ciptana_estu', 'm._yusuf_pirdaus',
    'maikel_yonderi_u', 'muhammad_abdussalam', 'muhammad_aldo', 'muhammad_anes',
    'muhammad_khoirul_anam', 'muhammad_nabil', 'muhammad_nurrizky', 'muhammad_ramadhana',
    'muhammad_rizky_aditya', 'nazrie', 'novia_ayu_fitriana', 'nur_mila_wati', 'riska',
    'sakti_widi_yulistiani', 'salsa_nabila', 'siti_mariam', 'siti_rafika_kyrania'
]

IMG_SIZE = (150, 150)  # Ukuran input gambar (sesuai model CNN)

def preprocess_image(image_bytes):
    try:
        image = Image.open(io.BytesIO(image_bytes)).convert('RGB')
        image = image.resize(IMG_SIZE)
        image_array = np.array(image) / 255.0  # Normalisasi
        return np.expand_dims(image_array, axis=0)  # (1, 150, 150, 3)
    except Exception as e:
        raise ValueError(f"Image preprocessing failed: {str(e)}")

@app.route('/predict', methods=['POST'])
def predict():
    try:
        if 'image' not in request.files:
            return jsonify({'error': 'No image file part in the request'}), 400

        file = request.files['image']
        image_bytes = file.read()

        processed_image = preprocess_image(image_bytes)
        predictions = model.predict(processed_image)

        predicted_idx = np.argmax(predictions)
        confidence = float(np.max(predictions))

        threshold = 0.80
        if confidence < threshold:
            return jsonify({
                'label': 'Unknown',
                'confidence': round(confidence, 2)
            })

        predicted_label = class_labels[predicted_idx]

        return jsonify({
            'label': predicted_label,
            'confidence': round(confidence, 2)
        })

    except Exception as e:
        return jsonify({'error': str(e)}), 500

@app.route('/', methods=['GET'])
def home():
    return jsonify({'message': 'Flask CNN Prediction API is running!'}), 200

if __name__ == '__main__':
    app.run(debug=True, port=5000)

