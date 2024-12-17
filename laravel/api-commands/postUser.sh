curl -X 'POST' \
  'http://127.0.0.1:8000/api/users?uname=travis&password=travis' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "uname": "Alina",
  "createdAt": "2024-12-04T12:22:59.000000Z",
  "updatedAt": "2024-12-04T12:22:59.000000Z",
  "usertype": "valunteer"
}'