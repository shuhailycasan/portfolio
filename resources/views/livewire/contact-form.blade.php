<div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form
            wire:submit.prevent="submit"
            class="p-4 p-md-5 border rounded-3 bg-light">
            @csrf

            @error('name') <small class="text-danger" class="mx-auto">{{ $message }}</small> @enderror
            <div class="form-floating mb-3">
                <input wire:model.lazy="name" type="text" class="form-control"  placeholder="Name here...">
                <label for="floatingName">Full Name</label>
            </div>

            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            <div class="form-floating mb-3">
                <input wire:model.lazy="email" type="email" class="form-control"  placeholder="name@example.com">
                <label for="floatingEmail">Email Address</label>
            </div>
                
            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
            <div class="form-floating mb-3">
                <textarea wire:model.lazy="message" class="form-control" placeholder="Your message here..." id="floatingMessage" style="height: 150px;"></textarea>
                <label for="floatingMessage">Message</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Send Message</button>

            <hr class="my-4">
            <small class="text-muted">I respect your inbox — no spam, ever.</small>
        </form>
    </div>