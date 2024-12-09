curl -X 'POST' \
  'http://127.0.0.1:8000/api/users?uname=a&password=a' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "uname": "pusia",
  "createdAt": "2024-12-05T11:56:20.000000Z",
  "updatedAt": "2024-12-05T11:56:20.000000Z"
  "usertype": "user"
}'