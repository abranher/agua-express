function TextareaForm({
  name,
  type = "text",
  title,
  register,
  errors,
  rules,
  defaultValue,
}) {
  return (
    <>
      <div className="relative z-0 w-full my-3">
        <label
          htmlFor={name}
          className="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
          {`${title} *`}
        </label>
        <textarea
          type={type}
          rows={4}
          defaultValue={defaultValue}
          id={name}
          className="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
          placeholder=""
          {...register(name, rules)}
        ></textarea>

        {errors && (
          <p className="mt-2 text-sm text-red-600 dark:text-red-500">
            <span className="font-medium">Ups! {errors.message}</span>
          </p>
        )}
      </div>
    </>
  );
}

export default TextareaForm;
