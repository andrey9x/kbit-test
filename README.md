docker-compose up -d

curl -X POST \
   -H "Content-Type: multipart/form-data" \
   -F "s_name=cname" \
   -F "c_name=sname" \
   -F "c_id=test_id" \
   -F "a_type=type" \
   -F "direction=left" \
   -F "activation=full" \
   -F "c_state=partial" \
   -F "control=left" \
   http://localhost:8000/queue-status/create