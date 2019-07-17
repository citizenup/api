# API
* ## Me (coming soon)
    * Path `/me`
        * __GET__ - Return profile details for the current user
        * __PATCH__ - Update current users profile
    * Path `/me/comments`
    * Path `/me/subscriptions`
    * Path `/me/notifications`

* ## Documents (regulations)
    * Path `/documents`
    * __GET__ - Return a list of documents

        ```json
        {
            "type": "document",
            "data": [
                {
                    "agencyAcronym": "EPA",
                    "allowLateComment": false,
                    "attachmentCount": 0,
                    "commentDueDate": "2014-10-03T23:59:59-04:00",
                    "commentStartDate": "2014-09-03T00:00:00-04:00",
                    "docketId": "EPA-R01-OAR-2012-0260",
                    "docketTitle": "Approval and Promulgation of Air Quality Implementation Plans; New Hampshire; 111(d) MWC State Plans for Large and Small Municipal Waste Incinerators and State Plan for Other Solid Waste Incinerators.",
                    "docketType": "Rulemaking",
                    "documentId": "EPA-R01-OAR-2012-0260-0002",
                    "documentStatus": "Posted",
                    "documentType": "Rule",
                    "frNumber": "2014-20803",
                    "numberOfCommentsReceived": 0,
                    "openForComment": false,
                    "postedDate": "2014-09-03T00:00:00-04:00",
                    "rin": "Not Assigned",
                    "title": "State Plans for Designated Facilities and Pollutants; Approvals and Promulgations: New Hampshire; Large and Small Municipal Waste Combustors"
                }
            ],
            "links": {
                "self": "/documents?start=0&length=10",
                "next": "/documents?start=10&length=10"
            }
        }
        ```
    * Path `/documents/{documentId}`
        * __GET__ - Return a single document
            * Options
                * __include__ array of related objects to include
                    * [tags](#tags) Returns a list of tags related to the document
                    * [comments](#Comments) Return a list of user comments for the document

                        ```json
                        {
                            "type": "document",
                            "data": [
                                {
                                    "agencyAcronym": "EPA",
                                    "allowLateComment": false,
                                    "attachmentCount": 0,
                                    "commentDueDate": "2014-10-03T23:59:59-04:00",
                                    "docketType": "Rulemaking",
                                    "documentId": "EPA-R01-OAR-2012-0260-0002",
                                    ...
                                }
                            ],
                            "links": {
                                "self": "/documents/EPA-R01-OAR-2012-0260-0002"
                            },
                            "related": {
                                "tags": [
                                    {
                                        ...
                                    }
                                ],
                                "comments": [
                                    {
                                        ...
                                    }
                                ]
                            }
                        }
                        ```

* ## Tags
    * Path `/tags`
        * __GET__ Fetch a list of available tags

            ```json
            {
                "type": "tags",
                "data": [
                    {
                        "id": "389db279-ea8d-4dea-9a1f-ff0d34f3428a",
                        "label": "Environment"
                    },
                    {
                        "id": "58aab846-f68d-4295-8e67-05527cf721ea",
                        "label": "Women's Rights"
                    },
                        ...
                ]
            }
            ```
        * __POST__ Add a tag
    * Path `/tags/{tag_id}`
        * __GET__ return details related to the specified tag
            * `include[]=documents` Return list of documents related to the tag

                ```json
                {
                    "type": "tags",
                    "data": [
                        {
                            "id": "389db279-ea8d-4dea-9a1f-ff0d34f3428a",
                            "label": "Environment",
                            "created_on": "2017-02-24 14:35:06",
                            "created_by": "6c8a381a-2d52-4d25-b94a-50858922d11b"
                        }
                    ],
                    "links": {
                        "self": "/tags/389db279-ea8d-4dea-9a1f-ff0d34f3428a?include[]=documents"
                    },
                    "related": {
                        "users": [
                            {
                                "id": "6c8a381a-2d52-4d25-b94a-50858922d11b",
                                "name": "Tom",
                                "url": "/users/6c8a381a-2d52-4d25-b94a-50858922d11b"
                            }
                        ],
                        "documents": [
                            {
                                "agencyAcronym": "EPA",
                                "allowLateComment": false,
                                "attachmentCount": 0,
                                "commentDueDate": "2014-10-03T23:59:59-04:00",
                                "docketType": "Rulemaking",
                                "documentId": "EPA-R01-OAR-2012-0260-0002",
                                ...
                            },
                            ...
                        ]
                    }
                }
                ```
        * __PATCH__ Update a tags label

            ```json
            {
                "id": "389db279-ea8d-4dea-9a1f-ff0d34f3428a",
                "label": "The Environment"
            }
            ```

* ## Document Tags
    * Path `/document-tags`
        * __POST__ Tag a document

            ```json
            {
                "tag": "389db279-ea8d-4dea-9a1f-ff0d34f3428a",
                "document": "EPA-R01-OAR-2012-0260-0002"
            }
            ```
    * Path `/document-tags/{document_id}-{tag_id}`
        * __DELETE__ Remove a tag from a document

* ## Comments
    * Path `/comments`
        * __GET__ Retrieve a list of comments from an associated document
            * __Requires__ `document={document_id}`
    * Path `/comments/comment_id`
