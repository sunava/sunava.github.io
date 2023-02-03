@Name("gig.examples.guestbook.GuestbookService")
public class GuestbookService {

    @Inject GuestbookRepository repository;

    @Inject Configuration configuration;

    ...

    public List<Comment> list() {
//      int limit = 20;
        int limit = configuration.get("limit");
        return repository.list(limit);
    }

}
