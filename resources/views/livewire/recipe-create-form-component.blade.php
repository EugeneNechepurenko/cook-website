{{--<div>--}}
{{--     Knowing others is intelligence; knowing yourself is true wisdom. --}}
{{--    <form wire:submit.prevent="submit">--}}

{{--        <div class="form-group"><label for="blog_title" class="mb-2"><strong>Blog Title</strong></label>--}}
{{--            <div class="col-md-12 mb-3"><input wire:model="blog_title" type="text" class="form-control @error('blog_title') is-invalid @enderror" autofocus>--}}
{{--                @error('blog_title')<span class="invalid-feedback"><strong>{{ $message }}</strong></span>@enderror--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <input type="text" wire:model="name">--}}
{{--        @error('name') <span class="error">{{ $message }}</span> @enderror--}}

{{--        <input type="text" wire:model="email">--}}
{{--        @error('email') <span class="error">{{ $message }}</span> @enderror--}}

{{--        <button type="submit">Save Contact</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--<div class="bootstrap-tagsinput">--}}
{{--    <span class="tag label label-info">Istanbul<span data-role="remove"></span></span>--}}
{{--    <span class="tag label label-info">Ankara<span data-role="remove"></span></span>--}}
{{--    <input type="text" placeholder="">--}}
{{--</div>--}}

<div class="row">

{{--        <input type="text" wire:model="text">--}}
{{--        <a wire:click="add">Add</a>--}}
{{--        @foreach ($arr as $item)--}}
{{--            <p wire:click="del('{{ $item }}')">{{ $item }}</p><br>--}}
{{--        @endforeach--}}


{{--<div>--}}
{{--    <input type="text" wire:model="ingredient_title">--}}
{{--    <input type="text" wire:model="ingredient_amount">--}}
{{--    <input type="text" wire:model="ingredient_type">--}}
{{--    <button wire:click="ingredient_add">Add</button>--}}
{{--    <div class="bootstrap-tagsinput">--}}
{{--        @foreach ($ingredients_arr as $item)--}}
{{--            <span class="tag label label-info">{{ $item['title'] }}<span data-role="remove" wire:click="ingredient_del('{{ $item['title'] }}')"></span></span>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}





    <div class="col-md-12">
        <div class="card card-secondary">
            <form class="form-horizontal" id="recipe" method="POST" wire:submit.prevent="submit" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title" wire:model="title">
                            @error('title')<span class="invalid-feedback"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div> {{-- +title --}}
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" wire:model="description"></textarea>
                        </div>
                    </div> {{-- +description --}}
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">category</label>
                        <div class="col-sm-10">
                            <select id="category" name="category_id" class="form-control"  data-placeholder="Select a category" wire:model="category_id">
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> {{-- +category_id --}}
                    <div class="form-group row">
                        <label for="total_time" class="col-sm-2 col-form-label">total_time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="total_time" placeholder="total_time" name="total_time"  wire:model="total_time">
                        </div>
                    </div> {{-- +total_time --}}
                    <div class="form-group row">
                        <label for="difficulty" class="col-sm-2 col-form-label">difficulty</label>
                        <div class="col-sm-10">
                            <select id="difficulty" name="difficulty_id" class="form-control"  data-placeholder="Select a difficulty" wire:model="difficulty_id">
                                @foreach ($difficulty as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> {{-- +difficulty_id --}}
                    <div class="form-group row">
                        <label for="yields" class="col-sm-2 col-form-label">yields (порции)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="yields" placeholder="yields" name="yields" wire:model="yields">
                        </div>
                    </div> {{-- +yields (порции) --}}
                    <div class="form-group row">
                        <label for="cuisine" class="col-sm-2 col-form-label">cuisine</label>
                        <div class="col-sm-10">
                            <select id="cuisine" name="cuisine_id" class="form-control"  data-placeholder="Select a cuisine" wire:model="cuisine_id">
                                @foreach ($cuisine as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> {{-- +cuisine_id --}}
                    <div class="container-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>ingredient</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" wire:model="ingredient_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">amount</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" wire:model="ingredient_amount">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">type</label>
                                        <div class="col-sm-10">
                                            <select  class="form-control" type="text" wire:model="ingredient_type">
                                                <option value="gr">gr</option>
                                                <option value="l">l</option>
                                                <option value="" selected></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <a class="btn btn-primary" wire:click="ingredient_add">Add</a>
                                    </div>
                            </div>
                            <div class="col-lg-12  bootstrap-tagsinput">
                                @foreach ($ingredients_arr as $item)
                                    <span class="tag label label-info">{{ $item['amount'] }}{{ $item['type'] }} {{ $item['title'] }}<span data-role="remove" wire:click="ingredient_del('{{ $loop->index }}')"></span></span>
                                @endforeach
                            </div>
                        </div>
                    </div> {{-- ingredients --}}
                    <div class="container-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>step</h4>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <ul>
                            @foreach ($step_arr as $item)
                                <li>
                                    <p class="w-100">{{ $item['text'] }}</p>
                                    @if($item['imgs'])
                                        <img src="{{ $item['imgs']->temporaryUrl() }}" width="75" height="75" alt="">
                                    @endif
                                </li>
                                <a class="btn btn-danger" wire:click="step_del('{{ $loop->index }}')">remove {{ $loop->index }}</a>
                            @endforeach</ul>
                            </div>
                            <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">text</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" wire:model="step_text" name="step_text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">imgs</label>
                                        <div class="col-sm-10">
                                            <input  type="file" wire:model="step_imgs" name="step_imgs">
                                            <div wire:loading wire:target="step_imgs">Uploading...</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <a class="btn btn-primary" wire:click="step_add">Add</a>
                                    </div>
                            </div>
                        </div>
                    </div> {{-- steps --}}
                    <div class="container-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>tag</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" wire:model="tag_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <a class="btn btn-primary" wire:click="tag_add">Add</a>
                                    </div>
                            </div>
                            <div class="col-lg-12  bootstrap-tagsinput">
                                @foreach ($tag_arr as $item)
                                    <span class="tag label label-info">{{ $item }}<span data-role="remove" wire:click="tag_del('{{ $item }}')"></span></span>
                                @endforeach
                            </div>
                        </div>
                    </div> {{-- tags --}}




                    <div class="form-group row">
                        <label for="active_time" class="col-sm-2 col-form-label">active_time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="active_time" placeholder="active_time" name="active_time"   wire:model="active_time">
                        </div>
                    </div> {{-- +active_time --}}
                    <div class="form-group row">
                        <label for="kcal" class="col-sm-2 col-form-label">kcal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kcal" placeholder="kcal" name="kcal" wire:model="kcal">
                        </div>
                    </div> {{-- +kcal --}}
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" placeholder="price" name="price" wire:model="price">
                        </div>
                    </div> {{-- +price --}}
                    <div class="form-group row">
                        <label for="img" class="col-sm-2 col-form-label">img</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img" name="img" wire:model="img">
                            <div wire:loading wire:target="img">Uploading...</div>
                            @if($img)
                                <img src="{{ $img->temporaryUrl() }}" width="75" height="75" alt="">
                            @endif
                        </div>
                    </div> {{-- +img --}}
                </div>
                <div class="card-footer">
                    <a href="{{route('dashboard-recipes-all')}}" class="btn btn-default">Back</a>
                    <button type="submit" class="btn btn-info float-right">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
