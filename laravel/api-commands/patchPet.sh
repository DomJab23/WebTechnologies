curl -X 'PATCH' \
  'http://127.0.0.1:8000/api/pets/25?uname=a&password=a' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/merge-patch+json' \
  -d '{
  "name": "string",
  "age": 123,
  "species": "doggajno",
  "breed": "slutujno",
  "sterilized": true,
  "health": "sick af",
  "descriptions": "he wass sucking his mom balls",
  "createdAt": "2024-12-09T14:38:57.997Z",
  "updatedAt": "2024-12-09T14:38:57.997Z",
  "volunteerUserId": "ahahahahah",
  "status": "hahahaha"
}'