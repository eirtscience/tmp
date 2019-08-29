FROM python:latest
ENV PYTHONUNBUFFERED 1
RUN apt-get update && apt-get install -y --no-install-recommends && rm -rf /var/lib/apt/lists/* && pip install --upgrade pip
RUN mkdir code
WORKDIR /code/
COPY . /code/
RUN pip install -r requirements.txt
