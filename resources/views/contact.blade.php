@extends('layouts.app')

@section('content')
<section id="contact">
  <div class="container">
    <h2>Contact Us</h2>
    <p>Get in touch with our team.</p>
    <form action="#" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>
@endsection
