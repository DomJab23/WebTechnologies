@extends('layout')

@section('title', 'Management')

@section('content')

    <section class="pet-menagement">
        
    <div class="pet-add">
            <p>Add pet:</p>
            <form action="{{ route('petAdd') }}" method="POST">
                @csrf
                <label for="name">Name of pet:</label><br>
                <input type="text" placeholder="Name of the pet" name="name" class="infoInput"/><br>

                <label for="age">Age of pet:</label><br>
                <input type="number" placeholder="Age of the pet" name="age" class="infoInput"/><br>

                <label for="species">Species of pet:</label><br>
                <input type="text" placeholder="Species of the pet" name="species" class="infoInput"/><br>

                <label for="breed">Breed of pet:</label><br>
                <input type="text" placeholder="Breed of the pet" name="breed" class="infoInput"/><br>

                <label for="sterilized">Sterilized:</label>
                <input type="checkbox" placeholder="Is the pet sterilized?" name="sterilized" class="infoInput"/><br>

                <label for="health">Information about health of pet:</label><br>
                <textarea type="text" placeholder="Information about the health of the pet" name="health" class="infoInput healthInput"></textarea><br>

                <label for="descriptions">Description:</label><br>
                <textarea type="text" placeholder="Description of the pet" name="descriptions" class="infoInput descriptionInput"></textarea><br>

                <button class="add-pet-button">Add Pet</button>
            </form><br><br>
            <p>Delete pet:</p>
            <form action="{{ route('petDelete') }}" method="POST">
                @csrf
                <label for="id">Select the ID of the pet to delete:</label><br>
                <select name="id" class="infoInput">
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->id }} - {{ $pet->name }}</option>
                    @endforeach
                </select><br>
                <button class="delete-pet-button">Delete Pet</button>
            </form>
            <br><br>
        </div>

        
        <div class="pet-table">
        <p>Pets in the shelter:</p>

        <!-- Table of pets-->
        <table>
            <thead style="font-size:20px">
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Species</th>
                <th>Sterilized</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->age }}</td>
                        <td>{{ $pet->species }}</td>
                        @if($pet->sterilized)
                            <td>Sterilized</td>
                        @else
                            <td>Not sterilized</td>
                        @endif
                        <td>
                            <input type="hidden" name="id" value="{{ $pet->id }}">
                            <button 
                                onclick="
                                document.getElementById('updateForm').style.display='block';

                                document.getElementById('petId').value='{{ $pet->id }}';
                                document.getElementById('petName').value='{{ $pet->name }}';
                                document.getElementById('petAge').value='{{ $pet->age }}';
                                document.getElementById('petSpecies').value='{{ $pet->species }}';
                                document.getElementById('petBreed').value='{{ $pet->breed }}';
                                @if($pet->sterilized)
                                document.getElementById('petSterilized').checked=true;
                                @else
                                document.getElementById('petSterilized').checked=false;
                                @endif
                                document.getElementById('petHealth').value='{{ $pet->health }}';
                                document.getElementById('petDescriptions').value='{{ $pet->descriptions }}';
                                " 
                                class="update-button">Update</button>
                        </td>
                        <td>
                            <form action="{{ route('onePet') }}" method="GET">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pet->id }}">
                                <button class="more-button">More</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

    </section>
    <!--Modal Update Form-->
    <div id="updateForm" class="modal">
        <form class="modal-content animate" action="{{ route('petUpdate') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('updateForm').style.display='none'" class="close-x" title="Close Window">&times;</span>
            </div>

            <!-- Id of animal being updated -->
            <input type="hidden" placeholder="Id of the pet to update" name="id" id="petId" class="infoInput"/>

            <label for="name">Name of pet:</label><br>
            <input type="text" placeholder="Updated name of the pet" name="name" id="petName" class="infoInput"/><br>

            <label for="age">Age of pet:</label><br>
            <input type="number" placeholder="Updated age of the pet" name="age" id="petAge" class="infoInput"/><br>

            <label for="species">Species of pet:</label><br>
            <input type="text" placeholder="Updated species of the pet" name="species" id="petSpecies" class="infoInput"/><br>

            <label for="breed">Breed of pet:</label><br>
            <input type="text" placeholder="Updated breed of the pet" name="breed" id="petBreed" class="infoInput"/><br>
            
            <label for="sterilized">Sterilized:</label>
            <input type="checkbox" placeholder="Was the pet sterilized?" name="sterilized" id="petSterilized" class="infoInput"/><br>

            <label for="health">Health of pet:</label><br>
            <textarea type="text" placeholder="Updated information about the health of the pet" name="health" id="petHealth" class="healthInput"></textarea><br>

            <label for="descriptions">Description:</label><br>
            <textarea type="text" placeholder="Updated description of the pet" name="descriptions" id="petDescriptions" class="descriptionInput"></textarea><br>

            <button class="modal-button">Update Pet</button>
        </form>
    </div>
    <script>
    // Get the modal
    var updateForm = document.getElementById('updateForm');

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName('close')[0];

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        updateForm.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == updateForm) {
            updateForm.style.display = 'none';
        }
    }
</script>
@endsection
