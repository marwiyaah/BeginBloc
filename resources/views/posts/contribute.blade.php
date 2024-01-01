@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 100px 0 0 200px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
        display: flex;
        flex-direction: column;
    }

    .contribute_btn {
        height: 50px;
        width: 90px;
        border-radius: 10px;
        margin-left: 10px;
        border: none;
        box-shadow: #2A6877 0px 0px 2px 0px;
    }
    #confirmButton {
        width: 100%;
        height: 40px;
        font-size: 18px;
        font-family: DM Sans;
        font-weight: 500;
        letter-spacing: 0.50px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        background-color: #2A6877;
        color: #D5D5D5;
        font-weight: bold;
    }

    #confirmButton:disabled {
        background: #7C7C7C;
        color: #D5D5D5;
        cursor: not-allowed;
    }
    .container {
    display: flex;
    justify-content: space-between;
}

.container > div {
    flex-basis: 48%; /* Adjust the width of the divs as needed */
}
/* Add these styles to the existing CSS */
#contributeDiv {
    position: fixed;
    top: 0;
    right: 0;
    width: 70%; /* Adjust the width as needed */
    max-width: 400px;
    margin: 150px 100px 0 0; /* Adjust the margin as needed */
    padding: 20px;
    box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05);
    border-radius: 15px;
    background-color: rgba(200.81, 200.81, 200.81, 0.62);
    
}

</style>

<div class="container">
    <div style="width: 70%; max-width: 400px; margin: 50px 400px 0 0; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Start-up Overview</div>
                
                <h1>{{$post->title}}</h1>
                
                <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 300px; height: 300px"><br><br>
                <div>
                    {!!$post->body!!}
                </div>
                <div>
                    <h5>Budget: <span style="color: #40b840;">${!! $post->amount !!}</span></h5>
                    <h5>Amount needed for deployment: <span style="color: #b87a40;">${!! $post->new_amount !!}</span></h5>
                </div>
                <hr>
                <small>Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}</small>
                <hr>
                </div>
        </div>
    </div>
    <div id="contributeDiv" style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Contribute to this Project</div>
            @if(session('message'))
                <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                    {{ session('message') }}
                </div>
            @endif
            
                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Calculate amount for</label>
                <table>
                    <tr>
                        <td>
                            <button name="contribute1" id="contribute1" class="contribute_btn" onclick="setContribution(25)">25%</button>
                        </td>
                        <td>
                            <button name="contribute2" id="contribute2" class="contribute_btn" onclick="setContribution(50)">50%</button>
                        </td>
                        <td>
                            <button name="contribute3" id="contribute3" class="contribute_btn" onclick="setContribution(100)">100%</button>
                        </td>
                    </tr>
                </table>
                <label id="totalContributionLabel" style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Total contribution: <span id="calculatedAmount">${{ session('calculatedAmount') ?? '0.00' }}</span></label>
                <input type="hidden" name="selectedPercentage" id="selectedPercentage" value="{{ session('selectedPercentage') ?? '0' }}">
                <input type="hidden" name="totalContribution" id="totalContribution" value="{{ session('calculatedAmount') ?? '0.00' }}">

                <label>
                    <input type="checkbox" id="acceptTerms" name="acceptTerms" onchange="toggleConfirmButton(this)">
                    By checking this box, you are assuring that you are willingly contributing to this project and the developer can give you the money back within the mentioned time.
                </label>
                <br><br>
                <button type="button" id="confirmButton" disabled style="margin-top: -50px;" onclick="submitContribution()">
                    Submit
                </button>
            
        </div>
    </div>
</div>


<script>
    function toggleConfirmButton(checkbox) {
        var confirmButton = document.getElementById('confirmButton');
        confirmButton.disabled = !checkbox.checked;
    }

    function setContribution(percentage) {
        var calculatedAmount = (percentage / 100) * {!! $post->amount !!};
        document.getElementById('calculatedAmount').innerText = '$' + calculatedAmount.toFixed(2);
        document.getElementById('selectedPercentage').value = percentage;

        // Update the hidden input value
        document.getElementById('totalContribution').value = calculatedAmount.toFixed(2);

        sessionStorage.setItem('calculatedAmount', calculatedAmount.toFixed(2));
        sessionStorage.setItem('selectedPercentage', percentage);
    }


function submitContribution() {
    var postID = {{ $post->id }};
    var selectedPercentage = document.getElementById('selectedPercentage').value;

    // Perform AJAX request to submit contribution
    $.ajax({
        type: 'POST',
        url: '/submit-contribution',
        data: {
            post_id: postID,
            selected_percentage: selectedPercentage,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            // Handle the response, e.g., show a success message
            alert('Contribution submitted successfully!');
            window.location.href = '/posts/{{ $post->id }}';
        },
        error: function (error) {
            // Handle the error, e.g., show an error message
            alert('Error submitting contribution. Please try again.');
        }
    });
}



    // Set initial values from session storage
    var initialCalculatedAmount = sessionStorage.getItem('calculatedAmount');
    var initialSelectedPercentage = sessionStorage.getItem('selectedPercentage');
    if (initialCalculatedAmount !== null && initialSelectedPercentage !== null) {
        document.getElementById('calculatedAmount').innerText = '$' + initialCalculatedAmount;
        document.getElementById('selectedPercentage').value = initialSelectedPercentage;
    }

    // Clear session storage after page reload
    sessionStorage.removeItem('calculatedAmount');
    sessionStorage.removeItem('selectedPercentage');
</script>

@endsection
