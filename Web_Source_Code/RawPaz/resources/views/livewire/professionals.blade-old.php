<div class="row">
    {{json_encode($filteration)}}
                <div class="col-md-4">
                    <label for="">Select Experience</label>
                    <select wire:model='filteration.experience' type="text" class="form-control" name="" id="">
                        <option value="1 years">1</option>
                        <option value="2 years">2</option>
                    </select>
                    <label for="">Select Language</label>
                    <select wire:model='filteration.language' name="" id="" class="form-control">
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                    </select>
                    <div>
                        <label>Male</label>
                        <input type="radio" wire:model="filteration.gender" value="male">
                        <label>Female</label>
                        <input type="radio" wire:model="filteration.gender" value="female">
                        <label>All</label>
                        <input type="radio" wire:model="filteration.gender" value="">
                    </div>
                </div>
                <div class="col-md-8">
                <div class="col-md-12">
                    <input wire:model='searchTerm' type="text" class="form-cotrol" placeholder="Search">
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @forelse ($professionals as $professional)                          
                            <div class="col-md-12" wire:loading.class.delay='loading111'>
                                <div class="article">
                                Expertise: {{$professional->expertise}}
                                </div>
                                <hr>
                            </div>
                        @empty
                            <h6 class='loading111'>No record found</h6>
                        @endforelse
                    </div>
                    <div class="row">
                        <style>
                            nav svg{
                                max-width: 20px;
                            }

                        </style>
                         @if ($professionals->links()->paginator->hasPages())
                            <div class="mt-4 p-4 box has-text-centered">
                                {{ $professionals->links() }}
                            </div>
                        @endif
                    </div>
                </div>
                </div>
            </div>