from fastapi import FastAPI
from pydantic import BaseModel

app = FastAPI(title="67130065 พัชระพงษ์ ผุยหนองโพธิ์", version="1.0.0")

@app.get("/")
def read_root():
    return {"message": "Hello, FastAPI"}

@app.get("/items/{item_id}")
def read_item(item_id: int):
    return {"item_id": item_id}

class BMIRequest(BaseModel):
    weight: float  # in kg
    height: float  # in cm

@app.post("/bmi")
def calculate_bmi(data: BMIRequest):
    height_m = data.height / 100
    bmi = data.weight / (height_m ** 2)
    return {"bmi": round(bmi, 2)}
