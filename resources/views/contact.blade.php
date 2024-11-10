@extends('layout')

@section('content')
    <h2>Contact Me</h2>

    <!-- Success Alert -->
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert" style="display: none;">
        Thank you! Your message has been sent.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <!-- Contact Form -->
    <form id="contactForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your message here" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection

@section('scripts')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevents form from reloading the page

        // Show the success alert
        document.getElementById('successAlert').style.display = 'block';

        // Clear the form fields
        document.getElementById('contactForm').reset();
    });
</script>
@endsection
