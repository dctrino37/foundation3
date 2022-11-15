<form action="{{ url('contact') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{trans('middle_east_office.your_name')}}" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{trans('middle_east_office.your_email')}}" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="reason" id="reason"
                                    placeholder="{{trans('middle_east_office.reason_of_contact')}}" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="{{trans('middle_east_office.message')}}" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">{{trans('middle_east_office.loading')}}</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{{trans('middle_east_office.your_message_has_been_sent._thank_you!')}}</div>
                            </div>
                            <div class="text-center"><button type="submit">{{trans('middle_east_office.send_message')}}</button></div>
                        </form>