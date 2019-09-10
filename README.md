## API

Every API route prefixed with `/api/v1/`

| HTTP Verb | Path       | Controller#Action | Used for                                              |	
|-----------|------------|-------------------|-------------------------------------------------------|	
| GET       | /users/    | users#index       | Get list of user records                              |	
| GET       | /users/:id | users#show        | Get user record                                       |	
| POST      | /users/    | users#create      | Create a user record                                  |	
| PUT       | /users/:id | users#update      | Update a user record                                  |	
| DELETE    | /users/:id | users#delete      | Delete a user record                                  |	
| GET       | /session/  | sessions#show     | Return current session or `false`                     |	
| POST      | /session/  | sessions#create   | Create a new session, validates username and password |